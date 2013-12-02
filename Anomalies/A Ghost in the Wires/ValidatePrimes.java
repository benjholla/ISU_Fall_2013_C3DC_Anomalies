import java.io.File;
import java.util.Scanner;


public class ValidatePrimes {

	public static void main(String[] args) throws Exception {
		Scanner scanner = new Scanner(new File("./all_10_digit_primes.txt"));
		long validCounter = 0;
		while(scanner.hasNextLine()){
			String line = scanner.nextLine();
			// area code
			if(line.charAt(0) == '0' || line.charAt(0) == '1' || line.charAt(1) == '9'){
				// System.out.println("Invalid Area Code: " + line);
				continue;
			}
			// exchange numbers
			if(line.charAt(3) == '0' || line.charAt(3) == '1'){
				// System.out.println("Invalid Exchange Number: " + line);
				continue;
			}
			validCounter++;
		}
		scanner.close();
		System.out.println("Counter: " + validCounter);
	}

}
