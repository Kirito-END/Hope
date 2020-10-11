import 'package:flutter/material.dart';

class MiCuenta extends StatelessWidget{

  @override
  Widget build(BuildContext context){
    return Scaffold(
      body: Center(
        child: Column(
          children: [
            Container(
              padding: EdgeInsets.only(top: 60, right: 0),
              child: Text("Mi Perfil",
                  style: TextStyle(
                      color: Color(int.parse("0xff0D1333")),
                      fontSize: 30,
                      fontWeight: FontWeight.w900)),
            ),
            Container(
              child: Text("¡Bienvenido a tu perfil Hope!l",
                  style: TextStyle(
                      color: Color(int.parse("0xff0D1333")),
                      fontSize: 20,
                      fontWeight: FontWeight.w900)),
            ),
            Container(
              padding: EdgeInsets.only(bottom: 10,top:30,left: 10),

              child: Column(

                children: [
                  Image.asset('assets/images/perfil2.png',
                      width: 190.0),


                ],

              )
              ,
            ),
            Container(
              child: Text("Nombre",
                  style: TextStyle(
                      color: Color(int.parse("0xff0D1333")),
                      fontSize: 20,
                      fontWeight: FontWeight.w900)),
            ),Container(
              child: Text("Luis Eduardo",
                  style: TextStyle(
                      color: Color(int.parse("0xff0D1333")),
                      fontSize: 20,)),
            ),Container(
              child: Text("Numero",
                  style: TextStyle(
                      color: Color(int.parse("0xff0D1333")),
                      fontSize: 20,
                      fontWeight: FontWeight.w900)),
            ),Container(
              child: Text("3188863027",
                  style: TextStyle(
                    color: Color(int.parse("0xff0D1333")),
                    fontSize: 20,)),
            ),
            Container(
              child: Text("Genero",
                  style: TextStyle(
                      color: Color(int.parse("0xff0D1333")),
                      fontSize: 20,
                      fontWeight: FontWeight.w900)),
            ),Container(
              child: Text("Masculino",
                  style: TextStyle(
                    color: Color(int.parse("0xff0D1333")),
                    fontSize: 20,)),
            ), Container(
              child: Text("Fecha de nacimiento",
                  style: TextStyle(
                      color: Color(int.parse("0xff0D1333")),
                      fontSize: 20,
                      fontWeight: FontWeight.w900)),
            ),Container(
              child: Text("05/29/1995",
                  style: TextStyle(
                    color: Color(int.parse("0xff0D1333")),
                    fontSize: 20,)),
            ),Container(
              child: Text("Ciudad",
                  style: TextStyle(
                      color: Color(int.parse("0xff0D1333")),
                      fontSize: 20,
                      fontWeight: FontWeight.w900)),
            ),Container(
              child: Text("Popayan",
                  style: TextStyle(
                    color: Color(int.parse("0xff0D1333")),
                    fontSize: 20,)),
            ),

          ],
        )
      )
    );
  }




}