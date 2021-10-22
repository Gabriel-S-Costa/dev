import 'package:flutter/material.dart';

// MaterialApp -> principal widget para iniciar o projeto em flutter 
// 

void main() {
   runApp(MaterialApp(
      theme: ThemeData(
         primarySwatch: Colors.teal
      ),
      home: HomePage() 
   ));
}

// ignore: must_be_immutable
class HomePage extends StatefulWidget {

@override
   _HomePageState createState() => _HomePageState();
}

class _HomePageState extends State<HomePage> {
   var count = 0;

   void increment() {
      count++;
      setState(() {});
   }

   @override
   Widget build(BuildContext context) {    
      return Scaffold(
         appBar: AppBar(
         title: Text("Meu Primeiro App"),
         ),
         body: Center( 
         child: Text("Contador\n $count", textAlign: TextAlign.center)), 
         floatingActionButton: FloatingActionButton(
            child: Icon(Icons.add),
            onPressed: (){
               increment();
            },
         ),
      );
   }
}
