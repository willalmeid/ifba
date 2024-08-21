#include <iostream> 
using namespace std; 

main( ) { 

	int dia; 
	
	cout<<"Digite o dia: "; 
	cin>>dia; 

	switch(dia) { 
		case 1: 
			cout<<"O dia eh domingo"; 
			break;
		case 2:
			cout<<"O dia eh segunda"; 
			break; 
		case 3:
			cout<<"O dia eh terça feira"; 
			break;
		case 4: 
			cout<<"O dia eh quarta feira"; 
			break; 
		case 5: 
			cout<<"O dia eh quinta feira"; 
			break;
		case 6: 
			cout<<"O dia eh sexta feira"; 
			break;
		case 7: 
			cout<<"O dia eh sabado"; 
			break;
		default: 
			cout<<"erro";
	}
} 
