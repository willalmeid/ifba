#include <iostream> 
using namespace std; 

main ( ) { 

	char carteira; 
	
	cout <<"Digite a carteira: "; 
	cin>>carteira; 
	
	switch(carteira) { 
	    case 'A':
			cout<<"O tipo de veiculo eh moto";
	    	break; 
	    case 'B':
			cout<<"O tipo de veiculo eh carro"; 
	    	break;
	    case 'C': 
			cout<<"O tipo de veiculo eh carreta"; 
	    	break; 
	    case 'D': 
			cout<<"O tipo de veiculo eh onibus"; 
	    	break;
	    default:
			cout<<"nenhuma das carteiras eh A,B,C ou D";
	} 
} 
