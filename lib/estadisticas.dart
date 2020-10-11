import 'package:flutter/material.dart';

class Estadisticas extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
        body: Column(
      children: [

        Container(
          padding: EdgeInsets.only(top: 40, right: 180),
          child: Text("Estadisticas",
              style: TextStyle(
                  color: Color(int.parse("0xff0D1333")),
                  fontSize: 30,
                  fontWeight: FontWeight.w900)),
        ),
        Container(
          padding: EdgeInsets.only(bottom: 10,top:30,left: 10),

          child: Column(

            children: [
              Image.asset('assets/images/nacionali.png',
                  width: 360.0),

            ],

          )
          ,
        ),

        Row(
          children: [


            Container(
              padding: EdgeInsets.only(bottom: 10,top:30,left: 10),

              child: Column(

                children: [
                  Image.asset('assets/images/gru_affect.png',
                      width: 190.0),

                ],

              )
              ,
            ),Container(
              padding: EdgeInsets.only(bottom: 10,top:30,left: 10),

              child: Column(

                children: [
                  Image.asset('assets/images/gru_affect2.png',
                      width: 190.0),

                ],

              )
              ,
            ),
          ],
        ),
        Container(
          padding: EdgeInsets.only(bottom: 10,top:0,right: 220),

          child: Column(

            children: [
              Image.asset('assets/images/gru_affect3.png',
                  width: 160.0),

            ],

          )
          ,
        ),
        Container(
          padding: EdgeInsets.only(top: 20, left: 29,bottom: 20),
          child: Text("Casos diarios a nivel mundial",
              style: TextStyle(
                  color: Color(int.parse("0xff0D1333")),
                  fontSize: 30,
                  fontWeight: FontWeight.w900)),
        ),
        Container(
          padding: EdgeInsets.only(bottom: 0,top:0,),

          child: Column(

            children: [
              Image.asset('assets/images/estadis_img.png',
                  width: 290.0),

            ],

          )
          ,
        ),

      ],
    )
    );
  }
}
