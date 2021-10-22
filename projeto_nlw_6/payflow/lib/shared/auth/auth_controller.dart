import 'package:flutter/material.dart';
import 'package:payflow/shared/models/user_model.dart';
import 'package:shared_preferences/shared_preferences.dart';

class AuthController {
  UserModel? _user;

  UserModel get user => _user!; // garantir que o usuario nao esta null (null safety)

  void setUser(BuildContext context, UserModel? user) {
    if (user != null) {
      saveUser(user);
      _user = user;
      Navigator.pushReplacementNamed(
        context, "/home");
    } else {
      Navigator.pushReplacementNamed(
        context, "/login");
    }
  }

  Future<void> saveUser(UserModel user) async {
    final instance = await SharedPreferences.getInstance(); // comunicacao entre o flutter e o nativo para salvar os dados
    await instance.setString("user", user.toJson());
    return;
  }

  Future<void> currentUser(BuildContext context) async {
    final instance = await SharedPreferences.getInstance(); // comunicacao entre o flutter e o nativo para salvar os dados
    
    await Future.delayed(Duration(seconds: 2)); // delay para executar a autenticacao e a mudanca da view

    if (instance.containsKey("user")) {
      final json = instance.get("user") as String;
      setUser(context, UserModel.fromJson(json));
      return;
    } else {
      setUser(context, null);
    }
  }
}