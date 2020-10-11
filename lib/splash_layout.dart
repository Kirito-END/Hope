import 'dart:async';
import 'package:flutter/material.dart';

import 'login.dart';

class SplashLayout extends StatefulWidget{

  @override
  _SplashScreenState createState() => _SplashScreenState();






}

class _SplashScreenState extends State<SplashLayout> {

  void initState(){
    super.initState();
    _inicioSesion().then((value) {
      if(value){
        _navigationLogin();
      }
    });
  }

  Future<bool> _inicioSesion() async{
    await Future.delayed(Duration(milliseconds: 5000),(){} );
    return true;
  }

  void _navigationLogin(){
    Navigator.of(context).pushReplacement(
      MaterialPageRoute(builder: (BuildContext contex) =>Login())
    );
  }
  @override
  Widget build(BuildContext context){
    return Scaffold(
        body: Container(
          padding: EdgeInsets.only(top:300),
          child: Center(
              child: Column(
                children: [
                  Container(
                    padding: EdgeInsets.only(bottom: 35.0),

                    child: Image.asset('assets/images/hope_logo.png',
                      width: 330,
                      height: 133.0,),
                  ),
                  Text("Por ti por mi", style: TextStyle(fontSize: 50,fontWeight: FontWeight.w900),),
                  Text("Cuidemonos Juntos" ,style:TextStyle(fontSize: 30,fontWeight: FontWeight.w800))
                ],
              )
          ),
        )
    );

  }
}