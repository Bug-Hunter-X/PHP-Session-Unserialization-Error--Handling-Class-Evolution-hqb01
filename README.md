# PHP Session Unserialization Error: Handling Class Evolution

This repository demonstrates a common yet subtle error in PHP related to session handling and object serialization.  When a serialized object in a session variable changes (e.g., addition/removal of properties), unserialization can lead to unexpected behavior or errors.  This example illustrates the problem and provides a solution.

## Problem

The `bug.php` file shows how unserializing a session object after changes to its class can cause problems.  Specifically, accessing properties added after serialization will result in unexpected behavior or errors.

## Solution

`bugSolution.php` shows a more robust approach. It handles potential issues by checking the class structure before unserializing.  This solution offers a more robust way to manage session data where classes might evolve over time.