<?php
use PHPUnit\Framework\TestCase;

require 'task01.php'; // Replace 'your_file.php' with the file that contains discover_type()

class DiscoverTypeTest extends TestCase
{
    public function testDiscoverTypeAsStudent()
    {
        // Start output buffering to capture print output
        ob_start();

        // Call the function with a student case
        discover_type(21, 'Alice', 3.7, true);

        // Get the output and clean the buffer
        $output = ob_get_clean();

        // Assert the output is as expected
        $this->assertEquals(
            "Hello my name is Alice, I'm 21 years old. I'm a student at Epitech with a GPA of 3.7.\n",
            $output
        );
    }

    public function testDiscoverTypeNotAStudent()
    {
        // Start output buffering to capture print output
        ob_start();

        // Call the function with a non-student case
        discover_type(30, 'Bob', 0.0, false);

        // Get the output and clean the buffer
        $output = ob_get_clean();

        // Assert the output is as expected
        $this->assertEquals(
            "Hello my name is Bob, I'm 30 years old. I'm not a student.\n",
            $output
        );
    }
}
