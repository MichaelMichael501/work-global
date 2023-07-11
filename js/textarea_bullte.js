const textarea = document.getElementById('requirement');

    textarea.addEventListener('keydown', (event) => {
      if (event.key === 'Enter') {
        event.preventDefault(); // Prevent the default behavior of the Enter key

        const startPos = textarea.selectionStart;
        const endPos = textarea.selectionEnd;
        const currentValue = textarea.value;

        // Get the current line text
        const lines = currentValue.split('\n');
        const currentLineIndex = currentValue.substr(0, startPos).split('\n').length - 1;
        const currentLineText = lines[currentLineIndex];

        // Add a bullet point at the start of the new line
        const newValue =
          currentValue.substring(0, startPos) +
          '\n\u2022 ' +
          currentValue.substring(endPos);

        // Update the textarea value and adjust the cursor position
        textarea.value = newValue;
        textarea.selectionStart = startPos + 3;
        textarea.selectionEnd = startPos + 3;
      }
    });
