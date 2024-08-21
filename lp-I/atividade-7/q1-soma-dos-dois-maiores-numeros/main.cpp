#include <iostream>  

using namespace std;  

main( ) {  

	int num1, num2, num3, soma=0;  
	
	cout<<"informe o num1: ";  
	cin>>num1;  
	cout<<"informe o num2: ";  
	cin>>num2;  
	cout<<"informe o num3: ";  
	cin>>num3;
	
	if (num1>num2 || num1>num3)  {
		soma=soma+num1;  	
	}
	
	if (num1<num2 || num2>num3){
		soma=soma+num2;  	
	}  
	
	if (num1<num3 || num2<num3) {
		soma=soma+num3;	
	}  
	
	cout<<"A soma eh: " <<soma; 
} 
