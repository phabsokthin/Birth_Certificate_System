<div class="modal fade" id="ModalCreate" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ផ្ទាំងបង្កើតថ្មី</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('district.store') }}" method="POST">
                    @csrf
                
                    <div class="mb-3">
                        <label for="province_id" class="form-label">ឈ្មោះខេត្ត (Khmer)</label>
                        <select class="form-select" id="province_id" name="province_id" required>
                            <option value="">ជ្រើសរើសឈ្មោះខេត្តជាភាសាខ្មែរ</option>
                            @foreach($province as $pro)
                                <option value="{{ $pro->province_id }}" data-en-name="{{ $pro->province_en_name }}">
                                    {{ $pro->province_kh_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="province_en_name" class="form-label">ឈ្មោះខេត្ត (English)</label>
                        <input type="text" class="form-control" id="province_en_name" name="province_en_name" placeholder="ចូរបញ្ចូលខេត្តជាភាសាEnglish" disabled>
                    </div>

                    <div class="mb-3">
                        <label for="district_kh_name" class="form-label">ស្រុក(ខ្មែរ)</label>
                        <input type="text" class="form-control" id="district_kh_name" name="district_kh_name" placeholder="ចូរបញ្ចូលស្រុក(ខ្មែរ)" required>
                    </div>

                    <div class="mb-3">
                        <label for="district_en_name" class="form-label">ស្រុក(Engish)</label>
                        <input type="text" class="form-control" id="district_en_name" name="district_en_name" placeholder="ចូរបញ្ចូលស្រុក(Engish)" required>
                    </div>

                    <div class="mb-3">
                        <label for="dis_code" class="form-label">លេដកូដ</label>
                        <input type="text" class="form-control" id="dis_code" name="dis_code" placeholder="ចូរបញ្ចូលលេខកូដ" required>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">បិទ</button>
                        <button type="submit" class="btn btn-primary">រក្សាទុក</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('province_id').addEventListener('change', function() {
        // Get the selected option
        const selectedOption = this.options[this.selectedIndex];
        
        // Retrieve the data attribute containing the English name
        const englishName = selectedOption.getAttribute('data-en-name');
        
        // Set the English name input field value
        document.getElementById('province_en_name').value = englishName;
    });
</script>