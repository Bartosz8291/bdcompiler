#include <stdio.h>

// Structure to hold compiler data
struct CompilerData {
    char language[20];
    char description[100];
};

// Function to initialize compiler data
void initializeCompilerData(struct CompilerData *data) {
    // Setting language and description
    strcpy(data->language, "bdcompiler");
    strcpy(data->description, "A compiler for multiple programming languages.");
}

int main() {
    // Initialize compiler data
    struct CompilerData data;
    initializeCompilerData(&data);

    // Display compiler data
    printf("Compiler Name: %s\n", data.language);
    printf("Description: %s\n", data.description);

    return 0;
}
