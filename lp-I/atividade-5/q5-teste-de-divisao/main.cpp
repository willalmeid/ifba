#include <iostream>  
using namespace std;  

main( ) {  

	int numero1, numero2;  
	
	cout << "Informe numero1= ";
	cin >> numero1;	
	cout << "Informe numero2= ";
	cin >> numero2;  
	
	if (numero2%numero1==0) {
		cout << "O numero2 eh Divisivel pelo numero1"; 
	} else {  
		cout << "O numero2 nao eh Divisivel pelo numero1";  
	}
} 
