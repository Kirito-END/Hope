import 'package:flutter/material.dart';

import 'auto_eva_pre.dart';

class Informacion extends StatelessWidget{
  void navegador(BuildContext context){
      Navigator.of(context).pushReplacement(
          MaterialPageRoute(builder: (BuildContext contex) =>AutoEvaPre())
      );

    }


    @override
  Widget build(BuildContext context){
    return Scaffold(
      body: Column(
        children: [
          Container(
              padding: EdgeInsets.only(top: 50.0),
              child: Center(
                child: Text("Auto evaluacion",style: TextStyle(fontSize: 35.0,fontWeight: FontWeight.w900),),
              )
          ),
          Container(
              padding: EdgeInsets.only(top: 30.0),
              child: Center(
                child: Text("Contesta las siguientes preguntas dadonos",
                  style: TextStyle(fontSize: 15.0, ),),
              )
          ),

              Container(

                child: Center(
                child: Text("conocimiento de tu estado de salud ",
                style: TextStyle(fontSize: 15.0, ),),
                )
                ),
          Container(

                child: Center(
                child: Text("y asi identificar sintomas asociados al  ",
                style: TextStyle(fontSize: 15.0, ),),
                )
                ),
          Container(

                child: Center(
                child: Text(" coronavirus ",
                style: TextStyle(fontSize: 15.0, ),),
                )
                ),
          Container(

              child: Center(
                child: Container(
                  padding: EdgeInsets.only(top:30),
                  child:  Image.asset('assets/images/auto_eva_img.png',
                    width: 291.0,
                    height: 203.0,
                  ),
                ),

              )
          ),
          Container(
            width: 250,
            height: 80,
            padding: EdgeInsets.only(top: 30),
            child:  Material(
              borderRadius: BorderRadius.circular(20.0),
              color: Colors.blue,
              shadowColor: Colors.blueAccent,

              child: GestureDetector(
                onTap: (){navegador(context);},
                child: Center(
                  child: Text("Empezar",style: TextStyle(fontWeight: FontWeight.w900,color: Colors.white),),
                ),
              ),

            ),
          ),

        ],
      ),
    );
  }

}