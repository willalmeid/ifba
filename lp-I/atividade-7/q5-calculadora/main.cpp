#include <iostream> 
using namespace std;  

main( ) { 

	int num; 
	
	float num1,  num2, resultado;
	
	cout<<"1-SOMA 2-MULTIPLICACAO 3-DIVISAO 4-SUBTRACAO \n"; 
	cin>>num; 
	cout<<"insira dois numeros \n"; 
	cin>>num1;
	cin>>num2; 
	
	if(num==1){
		resultado=num1+num2;
	} else if(num==2) {
		resultado=num1*num2; 	
	} else if(num==3) {
		resultado=num1/num2; 	
	} else if(num==4) {
		resultado=num1-num2;
	} else {
		cout<<"Operacao invalida"; 	
	}
	cout<<"O resultado eh: "<<resultado; 
} 

 
