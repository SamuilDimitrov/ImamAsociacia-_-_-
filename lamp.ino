float a;
int b=2;
int c=3;
int d=4;
int pump=9;
float p;
void setup() {
  Serial.begin(9600);
  pinMode(b,OUTPUT);
  pinMode(c,OUTPUT);
  pinMode(d,OUTPUT);
  pinMode(pump,OUTPUT);
}

void loop(){
     
     a=analogRead(A0);
     Serial.println(a);
     while(a <= 500){
      digitalWrite(b,HIGH);a=analogRead(A0);
     Serial.println(a);
      while(a <= 400){
        digitalWrite(c,HIGH);a=analogRead(A0);
     Serial.println(a);
        while(a <= 300){
          digitalWrite(d,HIGH);a=analogRead(A0);
     Serial.println(a);
        }
      }
     }
     delay(100);
     digitalWrite(b,LOW);      digitalWrite(c,LOW);      digitalWrite(d,LOW);
}
void pump_op(){}
