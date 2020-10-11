import 'package:flutter/material.dart';
import 'package:hopee/notificacioones.dart';


class HomeScreen extends StatelessWidget{
  void navegador(BuildContext context){
      Navigator.of(context).pushReplacement(
          MaterialPageRoute(builder: (BuildContext contex) => Notificaciones())
      );
    

  }

  Widget build(BuildContext context){

    return Scaffold(
      body: Column(
        children: [
          Container(
            width: MediaQuery.of(context).size.width,
            height: 300,

            decoration: BoxDecoration(
              color: Colors.blue,
              borderRadius: BorderRadius.only(
                bottomLeft: Radius.circular(50.0),
                bottomRight: Radius.circular(50.0),

              ),
            ),
            child: Row(
              children: [
                Column(

                  children: [
                    Container(
                      padding: EdgeInsets.only(left:40,top: 120),
                      child: Text("Tu salud a un click", style: TextStyle(color: Colors.white,fontSize: 20,fontWeight: FontWeight.w900),),
                    ),
                    Container(
                        child: Text("de distancia.",style: TextStyle(color: Colors.white,fontSize: 20,fontWeight: FontWeight.w900),
                        )),Container(
                        padding: EdgeInsets.only(left:15),
                        child: Text(" #QuedateEnCasa",style: TextStyle(color: Colors.white,fontSize: 20,fontWeight: FontWeight.w900),
                        )),



                  ],
                ),
                Column(
                  children: [
                    Container(
                      padding: EdgeInsets.only(left: 120,top:40),
                      width: 150,
                      height: 90,
                      child: GestureDetector(
                        onTap: (){navegador(context);},
                        child: Center(
                            child: Image.asset("assets/images/mdi_notifications_active.png")
                        ),
                      ),
                    ),Container(
                      padding: EdgeInsets.only(top:40),
                      width: 150,
                      height: 90,
                      child:  Material(
                        borderRadius: BorderRadius.circular(20.0),
                        color: Colors.white,
                        shadowColor: Colors.blueAccent,

                        child: GestureDetector(
                          onTap: (){},
                          child: Center(
                            child: Text("¡Llama ahora!",style: TextStyle(fontWeight: FontWeight.w900,color: Colors.black),),
                          ),
                        ),

                      ),
                    ),
                  ],
                )


              ],

            ),
          ),
          Container(
            padding: EdgeInsets.only(top: 40,right: 180),
            child: Text("Prevención",style: TextStyle(color: Color(int.parse("0xff0D1333")),fontSize: 30,fontWeight: FontWeight.w900)),
          ),
          Row(
            children: [
              Container(
                padding: EdgeInsets.only(bottom: 50,top:30 ,left: 15),

                child: Column(

                  children: [
                    Image.asset('assets/images/di.png',
                        width: 120.0),
                    Text("Diagnóstico"),
                    Text(" Rápido")
                  ],

                )
                ,
              ),Container(
                padding: EdgeInsets.only(bottom: 50,top:30,left: 10),

                child: Column(

                  children: [
                  Image.asset('assets/images/lava.png',
                  width: 120.0),
                    Text("Realiza una "),
                    Text("consulta ")
                  ],

                )
                ,
              ),Container(
                padding: EdgeInsets.only(bottom: 50,top:30,left: 10),

                child: Column(
    children: [
    Image.asset('assets/images/tapaboca.png',
    width: 120.0),
    Text("Solicita ayuda"),
    Text("Profesional"),
    ],
    )

                )
                ,


            ],
          ),
          Container(

            width: 340,
            height: 130,

            decoration: BoxDecoration(
                color: Colors.blue,
              borderRadius: BorderRadius.circular(20.0)
            ),
            child: Row(
              children: [
                Container(
                  child: Image.asset("assets/images/muneco.png"),
                ),
                Column(
                  children: [
                   Container(
                     padding: EdgeInsets.symmetric(horizontal: 20),
                     child:  Text("Necesitas más ayuda?",style: TextStyle(color: Colors.white,fontSize: 15,fontWeight: FontWeight.w900)),
                   ),Container(
                     padding: EdgeInsets.symmetric(horizontal: 0),
                     child:  Text("Realiza tu consulta ",style: TextStyle(color: Colors.white,fontSize: 15)),

                   ),Container(
                     padding: EdgeInsets.symmetric(horizontal: 0),
                     child:  Text("en tiempo real ",style: TextStyle(color: Colors.white,fontSize: 15)),

                   ),
                    Container(
                      child:  Text("a traves de",style: TextStyle(color: Colors.white,fontSize: 15)),
                    ), Container(
                      child:  Text("una videollamada",style: TextStyle(color: Colors.white,fontSize: 15)),
                    ),
                  ],
                )

              ],
            ),
          ),
        ],
      ),

    );
  }

}