#include <iostream> 
using namespace std; 

main ( ) { 

	int num; 
	
	cout<<"informe o num: "; 
	cin>>num;
	
	switch(num) { 
	    case 1: 
		    cout<<"o mes eh Janeiro"; 
		    break; 
	    case 2: 
		    cout<<"o mes eh Fevereiro"; 
		    break;
		case 3: 
		    cout<<"o mes eh Marco"; 
		    break;
		case 4: 
		    cout<<"o mes eh Abril"; 
		    break;
		case 5: 
		    cout<<"o mes eh Maio"; 
		    break;
		case 6:
		    cout<<"o mes eh Junho"; 
		    break;
		case 7: 
		    cout<<"o mes eh Julho"; 
		    break;
		case 8:
		    cout<<"o mes eh Agosto"; 
		    break;
		case 9:
		    cout<<"o mes eh Setembro"; 
		    break;
		case 10 : 
		    cout<<"o mes eh Otubro"; 
		    break; 
	    case 11: 
		    cout<<"o mes eh Novembro"; 
		    break; 
	    case 12: 
		    cout<<"o mes eh Dezembro"; 
		    break;
	    default: 
	    	cout<<"mes invalido";
	} 
} 
