#include <iostream> 
using namespace std; 

main() {
	int a,b,c;  
	int x; 
	
	cout <<"informe a: "; 
	cin >> a;
	cout <<"informe b: "; 
	cin >> b; 
	cout <<"informe c: "; 
	cin >> c; 
	
	int delta = (b*b) - 4*a*c; 
	
	cout <<"\nO delta e: "<<delta; 
} 
