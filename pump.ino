int pump=9;
float b;
int but=2;
int a=0;
void setup() {
  Serial.begin(9600);
  pinMode(pump,OUTPUT);
  pinMode(but, INPUT);
}

void loop(){
     b=analogRead(A0);
     if(b > 380)  {
      digitalWrite(pump,HIGH);
      }
     else digitalWrite(pump,LOW);
     Serial.println(b);
     delay(50);
}
