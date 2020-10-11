import 'package:flutter/material.dart';
import 'package:hopee/registro.dart';

import 'Informacion_intro.dart';

class Login extends StatelessWidget{
  void navegador(BuildContext context, bool key){
    if(key){
      Navigator.of(context).pushReplacement(
          MaterialPageRoute(builder: (BuildContext contex) =>Registro())
      );
    }else{
      Navigator.of(context).pushReplacement(
          MaterialPageRoute(builder: (BuildContext contex) =>Informacion())
      );
    }

  }
  @override
  Widget build(BuildContext context){
    
    return Scaffold(
      body: Container(
        padding: EdgeInsets.only(top: 50.0),
        child:Center(
          child: Column(
            children: [
              Image.asset('assets/images/login_image.png',
                height:194.0 ,
                width: 274,),
              Container(
                padding: EdgeInsets.only(top: 50.0),
                child: Column(
                  children: [
                    Container(
                      child: Text("Iniciar sesion",style: TextStyle(fontSize: 35.0,fontWeight: FontWeight.w900),)
                    ),
                    Column(

                        children: [
                          Container(
                              padding: EdgeInsets.only(top: 30.0),
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
                              padding: EdgeInsets.only(bottom: 50,top: 30.0),
                              width: 320.0,
                              child: TextField(
                                  decoration: InputDecoration(
                                    hintText: "Password",
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
                               onTap: (){navegador(context,false);},
                               child: Center(
                                 child: Text("Iniciar sesion",style: TextStyle(fontWeight: FontWeight.w900,color: Colors.white),),
                               ),
                             ),

                           ),
                         ),
                          Container(
                            padding: EdgeInsets.only(top: 30,left: 70),
                            child: Center(
                              child: Row(
                                children: [
                                  Text("Aun no tienes una cuenta?",style: TextStyle( fontSize: 15,fontWeight: FontWeight.w900),),
                                  GestureDetector(
                                    onTap: (){navegador(context,true);},
                                    child: Text("Crear cuenta",style: TextStyle(color: Colors.blue,fontSize: 15,fontWeight: FontWeight.w900),),
                                  )
                                ],
                              ),
                            )
                          )

                        ],
                      )
                  ],
                ),
              )
            ],

          ),
        ),
      ),
    );
    
  }
}