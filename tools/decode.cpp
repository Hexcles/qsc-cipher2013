#include <iostream>
#include <string>

using namespace std;

int main() {
	string byte;
	char tmp;
	while (cin >> byte) {
		tmp = 0;
		for (int i = 0; i <= 7; i++) {
			tmp = tmp * 2 + (byte[i]  - '0');
		}
		cout << tmp;
	}
	return 0;
}
