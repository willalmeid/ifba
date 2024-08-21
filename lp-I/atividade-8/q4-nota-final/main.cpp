#include <iostream> 
using namespace std; 

main ( ) { 

	int nota; 
	
	cout<<"Informe a nota: "; 
	cin>>nota;

	switch (nota) { 
	    case 7: 
		    cout<<"Simplesmente Aprovado"; 
		    break;
		case 8: 
		    cout<<"Simplesmente Aprovado"; 
		    break;
	    case 9: 
		    cout<<"Plenamente Aprovado"; 
		    break; 
	    case 10: 
		    cout<<"Aprovado com Distincao"; 
		    break;
	    default: 
	    	cout<<"Reprovado";
	} 

} 
