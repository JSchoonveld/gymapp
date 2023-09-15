import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;

import 'dart:convert'; // Import for JSON parsing

class Exercise {
  final int id;
  final String name;

  Exercise({
    required this.id,
    required this.name,
  });

  factory Exercise.fromJson(Map<String, dynamic> json) {
    return Exercise(
      id: json['id'],
      name: json['name'],
    );
  }
}

class LoginPage extends StatefulWidget {
  const LoginPage({super.key});

  @override
  State<StatefulWidget> createState() => _LoginPageState();
}

class _LoginPageState extends State<LoginPage> {
  final List<Exercise> exercises = [];

  @override
  void initState() {
    super.initState();
  }

  final url = Uri.https('gymapp.eu-1.sharedwithexpose.com', '/api/exercise');
  Future<List<Exercise>> getExercises() async {
    final response = await http.get(url);

    if (response.statusCode == 200) {
      final Map<String, dynamic> exerciseData = jsonDecode(response.body);
      final List<dynamic> exerciseList = exerciseData['data'];
      print(exerciseList);

      for (final item in exerciseList) {
        final exercise = Exercise.fromJson(item);
        exercises.add(exercise);
      }
    } else {
      throw Exception('Failed to load exercises');
    }

    return [];
  }

  void printList() async {
    final exerciseList = exercises;
    print(exerciseList);
  }

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Login page',
      home: Scaffold(
        body: Center(
            child: Column(
          mainAxisAlignment: MainAxisAlignment.center,
          children: [
            const Text(
              'Login page',
              style: TextStyle(fontSize: 24),
            ),
            const SizedBox(height: 24),
            ElevatedButton(
              onPressed: getExercises,
              style: ElevatedButton.styleFrom(
                padding: const EdgeInsets.symmetric(
                  horizontal: 40,
                  vertical: 12,
                ),
                backgroundColor: const Color.fromARGB(255, 33, 1, 95),
                foregroundColor: Colors.white,
                shape: RoundedRectangleBorder(
                  borderRadius: BorderRadius.circular(13),
                ),
                minimumSize: const Size(200, 55),
              ),
              child: const Text(
                'Login',
                style: TextStyle(fontSize: 24, color: Colors.white),
              ),
            ),
            ElevatedButton(
              onPressed: printList,
              child: Text('Print list'),
            ),
            Column(
              children: [
                for (final exercise in exercises) Text(exercise.name),
              ],
            )
          ],
        )),
      ),
    );
  }
}
