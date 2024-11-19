#This Python script is part of a project versioned with Git.
# Currently, I am working on the 'feature1' branch to implement improvements in data processing.
# Using branches allows me to test new features without affecting the main version of the project.
# Once the changes are done, the 'feature1' branch will be merged into the 'development' branch for testing.



#!/usr/bin/env python3

import sys
import cgi
import cgitb

# Enable error logging for debugging
cgitb.enable()

# Print content type for HTML
print("Content-Type: text/html\n")

try:
    # Retrieve values from command-line arguments
    values = list(map(float, sys.argv[1:6]))  # Read a, b, c, d, e

    # Check if all inputs are numeric
    if not all(isinstance(value, (int, float)) for value in values):
        print("<p>Error: All inputs must be numeric.</p>")
    else:
        # Check if any value is negative
        has_negative = any(value < 0 for value in values)
        negative_message = "Yes" if has_negative else "No"

        # Calculate the average of the numbers
        average = sum(values) / len(values)
        average_message = "Yes" if average > 50 else "No"

        # Determine if the count of positive numbers is even or odd
        positive_count = sum(1 for value in values if value > 0)
        even_or_odd = "Yes" if positive_count % 2 == 0 else "No"

        # Create a new list with values greater than 10, sort it
        filtered_list = sorted([value for value in values if value > 10])

        # Display results in HTML format
        print("<h2>Results:</h2>")
        print(f"<p>Original Values: {', '.join(map(str, values))}</p>")
        print(f"<p>Negative Value Present: {negative_message}</p>")
        print(f"<p>Average Greater Than 50: {average_message}</p>")
        print(f"<p>Positive Count Even: {even_or_odd}</p>")
        print(f"<p>Filtered and Sorted List: {', '.join(map(str, filtered_list))}</p>")

except ValueError:
    print("<p>Error: Please provide valid numeric inputs for all fields.</p>")


