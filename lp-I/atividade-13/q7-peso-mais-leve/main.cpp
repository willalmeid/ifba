#include <iostream>
using namespace std;

main() {
	
	int a = 999, b = 999;
	
	for(float i=0; i<b; i++){
		cout<<"\ninforme o peso (digite 999 para parar): ";
		cin>>i;
		if(i<999 && i<a) {
			a=i;
			cout<<"\n"<<a;
		}	
	}
	cout<<"\nO menor peso eh: "<<a;
}
