import java.io.File;
import java.io.FileWriter;
import java.util.Scanner;


public class TenDigitPrimes {

	public static void main(String[] args) throws Exception {
		FileWriter writer = new FileWriter(new File("./all_10_digit_primes.txt"));
		String base = "./primes_unzipped/";
		long numSkipped = 0;
		long numSaved = 0;
		for(int i=6; i<=46; i++){
			File file = new File(base + "Ate_100G_part" + i + ".txt");
			System.out.println("Parsing: " + file.getName());
			Scanner scanner = new Scanner(file);
			while(scanner.hasNextLine()){
				String line = scanner.nextLine();
				String[] primes = line.split("\\s+");
				for(String prime : primes){
					if(prime.length() == 10){
						writer.write(prime + "\n");
						numSaved++;
					} else {
						numSkipped++;
					}
				}
			}
			scanner.close();
		}
		writer.close();
		System.out.println("Num Saved: " + numSaved);
		System.out.println("Num Skipped: " + numSkipped);
	}

}
