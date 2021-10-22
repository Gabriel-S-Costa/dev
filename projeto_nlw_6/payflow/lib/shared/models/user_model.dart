import 'dart:convert';

class UserModel {
  final String name;
  final String? photoUrl; // null safe operator (?)

  // construtor
  UserModel({required this.name, this.photoUrl});
  
  factory UserModel.fromMap(Map<String, dynamic> map) {
    return UserModel(name: map['name'], photoUrl: map['photoUrl']);
  } 

  factory UserModel.fromJson(String json) => UserModel.fromMap(jsonDecode(json));

  // ruturn string | dynamic
  Map<String, dynamic> toMap() => {
    "name": name, 
    "photoUrl": photoUrl,
  };

  //convert to json
  String toJson() => jsonEncode(toMap());
  
}