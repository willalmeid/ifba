#include <iostream>  
using namespace std;  

main( ) {  

	int salario;  
	
	cout <<"informe o salario: ";  
	cin >> salario;  
	
	if (salario==678) {
		cout << "voce ganha um salario minimo";
	}
	if (salario>678) {  
		cout << "voce ganha mais de um salaro minimo";
	}  
	if(salario<678) {  
		cout << "voce ganha menos de um salario minimo";
	}  

} 
