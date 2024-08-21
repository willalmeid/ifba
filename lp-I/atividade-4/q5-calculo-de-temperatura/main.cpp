#include <iostream> 
using namespace std; 

main(){ 
	int temperatura; 
	
	cout <<"\t**************** Conversor de temperaturas *****************\n "; 
	cout <<"\t\t Digite uma temperatura em graus Celsius\n "; 
	cout <<"\t******************************************************** \n";
	cout <<"-> ";
	cin >>temperatura; 
	
	float fahrenheit = temperatura*1.8+32;
	
	cout <<"\nEm Fahrenheit e: "<<fahrenheit;
}	
