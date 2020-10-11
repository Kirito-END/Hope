import 'package:flutter/material.dart';
import 'package:hopee/splash_layout.dart';
main(){
  runApp(Myapp());
}

class Myapp extends StatelessWidget{
  @override
  Widget build(BuildContext build){
  return MaterialApp(
    theme: ThemeData(
      scaffoldBackgroundColor: Colors.white,
      backgroundColor: Colors.white,

    ),
    home: SplashLayout(),
  );
  }
}




