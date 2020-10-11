import 'package:flutter/material.dart';
import 'package:hopee/home_screen.dart';

import 'menu_inicial.dart';

class Notificaciones extends StatelessWidget{

  void navegador(BuildContext context){
    Navigator.of(context).pushReplacement(
        MaterialPageRoute(builder: (BuildContext contex) => Home())
    );


  }



  @override
  Widget build(BuildContext context){
    return Scaffold(
      body: Column(
        children: [
          Container(
            padding: EdgeInsets.only(right: 260,top:60),
            width: 300,
            height: 100,
            child: GestureDetector(
              onTap: (){navegador(context);},
              child: Center(
                  child: Image.asset("assets/images/baack.png")
              ),
            ),
          ),
          Container(
            padding: EdgeInsets.only(top: 30,left: 10),
            child: Text("Notificaciones de citas",
                style: TextStyle(
                    color: Color(int.parse("0xff0D1333")),
                    fontSize: 30,
                    fontWeight: FontWeight.w900)),
          ),
          Container(
            padding: EdgeInsets.only(left: 20,top:20),
            width: 390,
            height: 160,
            child:  Material(
              borderRadius: BorderRadius.circular(10.0),
              color: Color(int.parse("0xffF0F0F0")),
              shadowColor: Colors.blueAccent,

              child: GestureDetector(
                onTap: (){},
                child: Row(
                  children: [
                    Container(
                      width: 100,
                      padding: EdgeInsets.only(left: 20),
                      child: Image.asset("assets/images/cita2.png"),
                    ),
                   Column(
                     children: [
                       Container(
                         padding: EdgeInsets.only(top:40,left: 20),
                         child:  Text("Fecha: 11/10/2020",style: TextStyle(fontWeight: FontWeight.w900,color: Colors.black),),
                       ),
                       Container(
                         padding: EdgeInsets.only(top:5,left: 20),
                         child:  Text("Hora: 11:00 ",style: TextStyle(fontWeight: FontWeight.w900,color: Colors.black),),
                       ),
                     ],
                   ),
                  ],
                )
              ),

            ),
          ),

        ],
      )
    );
  }

}