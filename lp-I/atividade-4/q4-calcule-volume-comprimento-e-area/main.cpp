#include <iostream> 
using namespace std; 

main( ) { 
	int raio, comprimento, area;
	float pi = 3.14, volume;
	
	cout <<"informe o raio: "; 
	cin >>raio;
	
	comprimento = 2*pi*raio;
	area = pi*(raio*raio);
	volume = 0.75*pi*(raio*raio*raio);
	
	cout <<"\nO comprimento e: "<<comprimento; 
	cout <<"\nA area e: "<<area;
	cout <<"\nO volume e: "<<volume;
}
