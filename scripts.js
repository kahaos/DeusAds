document.addEventListener("DOMContentLoaded", () => {
  const lockBox = document.getElementById("lockBox");
  const settingsForm = document.getElementById("settingsForm");

  // Set the initial position of the lock box
  const setPosition = (position) => {
    lockBox.classList.remove("top-left", "top-right", "bottom-left", "bottom-right");
    lockBox.classList.add(position);
  };
  setPosition("top-left");

  // Update the lock box position based on the settings form
  settingsForm.addEventListener("submit", (event) => {
    event.preventDefault();
    const lockBoxPosition = event.target.elements.lockBoxPosition.value;
    setPosition(lockBoxPosition);
  });
});
// Add close button functionality
const closeButton = document.getElementById("closeButton");
closeButton.addEventListener("click", () => {
  lockBox.style.display = "none";
});

// Add functionality to update the number of boxes displayed
const numBoxes = document.getElementById("numBoxes");
numBoxes.addEventListener("change", () => {
  const numBoxesValue = parseInt(numBoxes.value);
  // Remove all existing boxes
  while (lockBox.firstChild && !lockBox.firstChild.classList.contains("close-button")) {
    lockBox.firstChild.remove();
  }
  // Add new boxes based on the selected value
  for (let i = 0; i < numBoxesValue; i++) {
    const box = document.createElement("div");
    box.style.width = "100%";
    box.style.height = "50px";
    box.style.backgroundColor = "#ccc";
    box.style.marginBottom = "10px";
    lockBox.appendChild(box);
  }
});
