const programsByDepartment = {
    Select: ["Select user access first"],
    CITCS: ["Computer Science", "Information Technology", "ACT", "Dean"],
    CBA: ["Business Administration", "Accountancy", "Dean"],
    CAS: ["Psychology", "Communication", "Dean"],
    CTE: ["Elementary Education", "Secondary Education", "Dean"]
};

document.getElementById("dept").addEventListener("change", function() {
    const selectedDept = this.value;
    const programSelect = document.getElementById("prog");
    
    // Clear existing options
    programSelect.innerHTML = "";
    
    // Populate new options
    if (programsByDepartment[selectedDept]) {
        programsByDepartment[selectedDept].forEach(program => {
            const option = document.createElement("option");
            option.value = program;
            option.textContent = program;
            programSelect.appendChild(option);
        });
    }
});