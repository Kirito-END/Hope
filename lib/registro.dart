import 'package:flutter/material.dart';
import 'package:hopee/login.dart';
 class Registro extends StatelessWidget{

   void navegador(BuildContext context){
     Navigator.of(context).pushReplacement(
         MaterialPageRoute(builder: (BuildContext contex) =>Login())
     );

   }

   Widget build(BuildContext context){
     return Scaffold(
       body: Container(
     padding: EdgeInsets.only(top: 50.0),
     child:Center(
     child: Column(
     children: [
     Container(
     padding: EdgeInsets.only(top: 50.0),
     child: Column(
     children: [
     Container(
       padding: EdgeInsets.only(right: 95),
         child: Text("Crear Cuenta",style: TextStyle(fontSize: 35.0,fontWeight: FontWeight.w900),)
     ),
     Column(

     children: [
     Container(
     padding: EdgeInsets.only(top: 30.0),
     width: 320.0,
     child: TextField(
     decoration: InputDecoration(
     hintText: "Nombre",
     contentPadding: const EdgeInsets.symmetric(horizontal: 2.0,vertical: 20),
     hintStyle: TextStyle(color: Colors.black, fontWeight: FontWeight.w800,fontSize: 15),
     focusedBorder: UnderlineInputBorder(borderSide:BorderSide(color: Colors.blue) ),
     )
     )
     ),
       Container(
           padding: EdgeInsets.only(bottom: 30,top: 30.0),
           width: 320.0,
           child: TextField(
               decoration: InputDecoration(
                 hintText: "Email",
                 contentPadding: const EdgeInsets.symmetric(horizontal: 2.0,vertical: 20),
                 hintStyle: TextStyle(color: Colors.black, fontWeight: FontWeight.w800,fontSize: 15),
                 focusedBorder: UnderlineInputBorder(borderSide:BorderSide(color: Colors.blue) ),
               )
           )
       ),
       Container(
           padding: EdgeInsets.only(bottom: 30),
           width: 320.0,
           child: TextField(
               decoration: InputDecoration(
                 hintText: "Contraseña",
                 contentPadding: const EdgeInsets.symmetric(horizontal: 2.0,vertical: 20),
                 hintStyle: TextStyle(color: Colors.black, fontWeight: FontWeight.w800,fontSize: 15),
                 focusedBorder: UnderlineInputBorder(borderSide:BorderSide(color: Colors.blue) ),
               )
           )
       ),
       Container(
           padding: EdgeInsets.only(bottom: 50,top: 10.0),
           width: 320.0,
           child: TextField(
               decoration: InputDecoration(
                 hintText: "Confirmar contraseña",
                 contentPadding: const EdgeInsets.symmetric(horizontal: 2.0,vertical: 20),
                 hintStyle: TextStyle(color: Colors.black, fontWeight: FontWeight.w800,fontSize: 15),
                 focusedBorder: UnderlineInputBorder(borderSide:BorderSide(color: Colors.blue) ),
               )
           )
       ),

     Container(
     width: 250,
     height: 50,
     child:  Material(
     borderRadius: BorderRadius.circular(20.0),
     color: Colors.blue,
     shadowColor: Colors.blueAccent,

     child: GestureDetector(
     onTap: (){navegador(context);},
     child: Center(
     child: Text("Registrarse",style: TextStyle(fontWeight: FontWeight.w900,color: Colors.white),),
     ),
     ),

     ),
     ),
     Container(
     padding: EdgeInsets.only(top: 30,left: 70),
     child: Center(
     child: Row(
     children: [
     Text("Ya tienes una cuenta?",style: TextStyle( fontSize: 15,fontWeight: FontWeight.w900),),
     GestureDetector(
     onTap: (){navegador(context);},
     child: Text("Iniciar sesion",style: TextStyle(color: Colors.blue,fontSize: 15,fontWeight: FontWeight.w900),),
     )
     ],
     ),
     )
     ),


     ],
     )
     ],
     ),
     )
     ],

     ),
     ),
     )
     );
   }

 }