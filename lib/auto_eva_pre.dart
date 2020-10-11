import 'package:flutter/material.dart';

import 'menu_inicial.dart';

class AutoEvaPre extends StatefulWidget {
  @override
  _SelectorButton createState() => _SelectorButton();
}

class _SelectorButton extends State<AutoEvaPre> {
  Color _myColor = Colors.white;
  Color _myColor2 = Colors.white;
  Color _myColor3 = Colors.white;
  Color _myColor4 = Colors.white;
  Color _myColor5 = Colors.white;
  Color _myColor6 = Colors.white;


  void navegador(BuildContext context, bool key){
      Navigator.of(context).pushReplacement(
          MaterialPageRoute(builder: (BuildContext contex) =>Home())
      );


  }


  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: Column(
        children: [
          Container(
              padding: EdgeInsets.only(top: 50.0),
              child: Center(
                child: Text(
                  "Auto evaluacion",
                  style: TextStyle(fontSize: 35.0, fontWeight: FontWeight.w900),
                ),
              )),
          Container(
              padding: EdgeInsets.only(top: 30),
              child: Center(
                child: Text(
                  " Selecciona los sintomas",
                  style: TextStyle(
                    fontSize: 15.0,
                  ),
                ),
              )),
          Container(
              child: Center(
            child: Text(
              " que presentas en los ultimos 14 dias ",
              style: TextStyle(
                fontSize: 15.0,
              ),
            ),
          )),
          Container(
            width: 360,
            height: 90,
            padding: EdgeInsets.only(top: 30),
            child: new GestureDetector(
                      child: new Container(

                        decoration: new BoxDecoration(color: Color(int.parse("0xff1D6EB5")),borderRadius: BorderRadius.circular(10.0)),
                        child: Row(
                          children: [
                            Container(
                              padding: EdgeInsets.only(left: 20.0),
                              child: Text("Fiebre",style: TextStyle(fontWeight: FontWeight.w900,color: Colors.white,fontSize: 20.0),),

                            ),
                            Container(
                              padding: EdgeInsets.only(left: 230.0),

                              child: Text(""),
                            ),
                            Container(

                              width: 20,

                              decoration: BoxDecoration(
                                shape: BoxShape.circle,
                                color: _myColor,

                              ),
                            )
                          ],
                        )
                      ),
                      onTap: () {
                        setState(() {
                          if (_myColor == Colors.white) {

                            _myColor = Colors.grey;
                          } else {

                            _myColor = Colors.white;
                          }
                        });
                      },
                    )
          ), Container(
            width: 360,
            height: 90,
            padding: EdgeInsets.only(top: 30),
            child: new GestureDetector(
                      child: new Container(

                        decoration: new BoxDecoration(color: Color(int.parse("0xff1D6EB5")),borderRadius: BorderRadius.circular(10.0)),
                        child: Row(
                          children: [
                            Container(
                              padding: EdgeInsets.only(left: 20.0),
                              child: Text("Dolor de garganta",style: TextStyle(fontWeight: FontWeight.w900,color: Colors.white,fontSize: 20.0),),

                            ),
                            Container(
                              padding: EdgeInsets.only(left: 120.0),

                              child: Text(""),
                            ),
                            Container(

                              width: 20,

                              decoration: BoxDecoration(
                                shape: BoxShape.circle,
                                color: _myColor2,

                              ),
                            )
                          ],
                        )
                      ),
                      onTap: () {
                        setState(() {
                          if (_myColor2 == Colors.white) {

                            _myColor2 = Colors.grey;
                          } else {

                            _myColor2 = Colors.white;
                          }
                        });
                      },
                    )
          ),Container(
            width: 360,
            height: 90,
            padding: EdgeInsets.only(top: 30),
            child: new GestureDetector(
                      child: new Container(

                        decoration: new BoxDecoration(color: Color(int.parse("0xff1D6EB5")),borderRadius: BorderRadius.circular(10.0)),
                        child: Row(
                          children: [
                            Container(
                              padding: EdgeInsets.only(left: 20.0),
                              child: Text("Flujo nasal",style: TextStyle(fontWeight: FontWeight.w900,color: Colors.white,fontSize: 20.0),),

                            ),
                            Container(
                              padding: EdgeInsets.only(left: 192.0),

                              child: Text(""),
                            ),
                            Container(

                              width: 20,

                              decoration: BoxDecoration(
                                shape: BoxShape.circle,
                                color: _myColor3,

                              ),
                            )
                          ],
                        )
                      ),
                      onTap: () {
                        setState(() {
                          if (_myColor3 == Colors.white) {

                            _myColor3 = Colors.grey;
                          } else {

                            _myColor3 = Colors.white;
                          }
                        });
                      },
                    )
          ),Container(
            width: 360,
            height: 90,
            padding: EdgeInsets.only(top: 30),
            child: new GestureDetector(
                      child: new Container(

                        decoration: new BoxDecoration(color: Color(int.parse("0xff1D6EB5")),borderRadius: BorderRadius.circular(10.0)),
                        child: Row(
                          children: [
                            Container(
                              padding: EdgeInsets.only(left: 20.0),
                              child: Text("Sintoma de gripa",style: TextStyle(fontWeight: FontWeight.w900,color: Colors.white,fontSize: 20.0),),

                            ),
                            Container(
                              padding: EdgeInsets.only(left: 132.0),

                              child: Text(""),
                            ),
                            Container(

                              width: 20,

                              decoration: BoxDecoration(
                                shape: BoxShape.circle,
                                color: _myColor5,

                              ),
                            )
                          ],
                        )
                      ),
                      onTap: () {
                        setState(() {
                          if (_myColor5 == Colors.white) {

                            _myColor5 = Colors.grey;
                          } else {

                            _myColor5 = Colors.white;
                          }
                        });
                      },
                    )
          ),Container(
            width: 360,
            height: 90,
            padding: EdgeInsets.only(top: 30),
            child: new GestureDetector(
                      child: new Container(

                        decoration: new BoxDecoration(color: Color(int.parse("0xff1D6EB5")),borderRadius: BorderRadius.circular(10.0)),
                        child: Row(
                          children: [
                            Container(
                              padding: EdgeInsets.only(left: 20.0),
                              child: Text("Tos",style: TextStyle(fontWeight: FontWeight.w900,color: Colors.white,fontSize: 20.0),),

                            ),
                            Container(
                              padding: EdgeInsets.only(left: 266.0),

                              child: Text(""),
                            ),
                            Container(

                              width: 20,

                              decoration: BoxDecoration(
                                shape: BoxShape.circle,
                                color: _myColor6,

                              ),
                            )
                          ],
                        )
                      ),
                      onTap: () {
                        setState(() {
                          if (_myColor6 == Colors.white) {

                            _myColor6 = Colors.grey;
                          } else {

                            _myColor6 = Colors.white;
                          }
                        });
                      },
                    )
          ),Container(
            width: 360,
            height: 90,
            padding: EdgeInsets.only(top: 30),
            child: new GestureDetector(
                      child: new Container(

                        decoration: new BoxDecoration(color: Color(int.parse("0xff1D6EB5")),borderRadius: BorderRadius.circular(10.0)),
                        child: Row(
                          children: [
                            Container(
                              padding: EdgeInsets.only(left: 20.0),
                              child: Text("Dificultad para respirar",style: TextStyle(fontWeight: FontWeight.w900,color: Colors.white,fontSize: 20.0),),

                            ),
                            Container(
                              padding: EdgeInsets.only(left: 73.0),

                              child: Text(""),
                            ),
                            Container(

                              width: 20,

                              decoration: BoxDecoration(
                                shape: BoxShape.circle,
                                color: _myColor4,

                              ),
                            )
                          ],
                        )
                      ),
                      onTap: () {
                        setState(() {
                          if (_myColor4 == Colors.white) {

                            _myColor4 = Colors.grey;
                          } else {

                            _myColor4 = Colors.white;
                          }
                        });
                      },
                    )
          ),

    Container(
      padding: EdgeInsets.only(top: 30),
    width: 250,
    height: 80,
    child:  Material(
    borderRadius: BorderRadius.circular(10.0),
    color: Colors.blue,
    shadowColor: Colors.blueAccent,

    child: GestureDetector(
    onTap: (){navegador(context,false);},
    child: Center(
    child: Text("Continuar",style: TextStyle(fontWeight: FontWeight.w900,color: Colors.white),),
    ),
    ),

    ),
    ),

        ],
      ),
    );
  }
}
