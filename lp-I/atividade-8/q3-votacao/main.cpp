#include <iostream> 
using namespace std; 

main ( ) { 

	int voto; 
	
	cout<<"Informe a voto: "; 
	cin>>voto; 
	
	switch (voto) { 
	    case 1: 
		    cout<<"voce votou em: bolsonaro PSL"; 
		    break; 
	    case 2: 
		    cout<<"voce votou em: Lula PT"; 
		    break; 
	    case 3: 
		    cout<<"voce votou em: Marina silva REDE"; 
		    break; 
	    case 4: 
		    cout<<"voce votou em: Cabo Daciolo PATRI"; 
		    break; 
	    case 5: 
		    cout<<"voce votou em: Ciro Gomez PDT"; 
		    break; 
	    default:
	    	cout<<"voce votou NULO";
	} 
} 
