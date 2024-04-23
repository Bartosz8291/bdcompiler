public class CompilerJava {

    // Class variable to hold compiler data
    private static String language;
    private static String description;

    // Method to initialize compiler data
    public static void initializeCompilerData() {
        // Setting language and description
        language = "bdcompiler";
        description = "A compiler for multiple programming languages.";
    }

    public static void main(String[] args) {
        // Initialize compiler data
        initializeCompilerData();

        // Display compiler data
        System.out.println("Compiler Name: " + language);
        System.out.println("Description: " + description);
    }
}
