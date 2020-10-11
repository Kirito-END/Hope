import 'package:flutter/material.dart';

class Prevencion extends StatelessWidget{

  @override
  Widget build(BuildContext context){
    return Scaffold(
      body: Column(
        children: [

          Container(
            padding: EdgeInsets.only(top: 40, right: 0),
            child: Text("Prevencion de Covid-19",
                style: TextStyle(
                    color: Color(int.parse("0xff0D1333")),
                    fontSize: 30,
                    fontWeight: FontWeight.w900)),
          ),


          Row(
            children: [


              Container(
                padding: EdgeInsets.only(bottom: 10,top:30,left: 10),

                child: Column(

                  children: [
                    Image.asset('assets/images/lavado-de-manos1.png',
                        width: 190.0),
                    Text("Lavar las",style: TextStyle(fontSize: 20),),
                    Text("manos",style: TextStyle(fontSize: 20),)

                  ],

                )
                ,
              ),Container(
                padding: EdgeInsets.only(bottom: 10,top:30,left: 10),

                child: Column(

                  children: [
                    Image.asset('assets/images/desinfectar1.png',
                        width: 190.0),
                    Text("Desinfectar  ",style: TextStyle(fontSize: 20),),
                    Text("las herraminetas",style: TextStyle(fontSize: 20),)

                  ],

                )
                ,
              ),
            ],
          ),
          Row(
            children: [
              Container(
                padding: EdgeInsets.only(bottom: 0,top:0,right: 40,left: 20),

                child: Column(

                  children: [
                    Image.asset('assets/images/distanciamiento-social1.png',
                        width: 160.0),
                    Text("Manten la ",style: TextStyle(fontSize: 20),),
                    Text("distancia a 2m",style: TextStyle(fontSize: 20),)

                  ],

                )
                ,
              ),
              Container(
                padding: EdgeInsets.only(bottom: 0,top:0,right: 0),

                child: Column(

                  children: [
                    Image.asset('assets/images/mascarilla-medica1.png',
                        width: 160.0),
                    Text("Usa",style: TextStyle(fontSize: 20),),
                    Text("tapabocas",style: TextStyle(fontSize: 20),)

                  ],

                )
                ,
              ),
            ],
          ),Row(
            children: [
              Container(
                padding: EdgeInsets.only(bottom: 0,top:0,right: 40,left: 20),

                child: Column(

                  children: [
                    Image.asset('assets/images/reunion1.png',
                        width: 160.0),
                    Text("Evita",style: TextStyle(fontSize: 20),),
                    Text("aglomeraciones",style: TextStyle(fontSize: 20),)

                  ],

                )
                ,
              ),
              Container(
                padding: EdgeInsets.only(bottom: 0,top:0,right: 0),

                child: Column(

                  children: [
                    Image.asset('assets/images/estornudar1.png',
                        width: 160.0),
                    Text("Al toser o ",style: TextStyle(fontSize: 14),),
                    Text("estornudar",style: TextStyle(fontSize: 14),),
                    Text("cubrete con el ",style: TextStyle(fontSize: 14),),
                    Text("antebrazo",style: TextStyle(fontSize: 14),),

                  ],

                )
                ,
              ),
            ],
          ),


        ],
      )
    );

  }
}