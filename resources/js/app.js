import './bootstrap';

document.getElementById('department_id').addEventListener('change', function() {
    var departmentId = this.value;
    if (departmentId) {
        fetch('/get-cities/' + departmentId)
            .then(response => response.json())
            .then(data => {
                var cityDropdown = document.getElementById('cityDropdown');
                var citySelect = document.getElementById('city_id');
                citySelect.innerHTML = '';
                data.forEach(city => {
                    var option = document.createElement('option');
                    option.value = city.id;
                    option.textContent = city.name;
                    citySelect.appendChild(option);
                });
                cityDropdown.style.display = 'block';
            })
            .catch(error => console.error(error));
    } else {
        document.getElementById('cityDropdown').style.display = 'none';
    }
});
