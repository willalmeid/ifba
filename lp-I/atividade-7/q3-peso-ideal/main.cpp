#include <iostream>  
using namespace std;  

main( ) {  

	float altura, peso, sub;  
	char sexo;  
	
	
	cout<<"informe o altura: ";  
	cin>>altura;  
	cout<<"informe o sexo: ";  
	cin>>sexo;  
	
	if(sexo=='M'){ 
		sub=58;
		peso=72.2;
	}  
	
	if(sexo=='F'){ 
		sub=44.7; 
		peso=62.1; 
	}  
	
	float pesoi= (peso*altura)-sub;  
	cout<<"Peso Ideal: "<<pesoi;  
} 
