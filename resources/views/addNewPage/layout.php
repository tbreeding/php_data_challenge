<div class="container">
    <div class="inner">
        <h2>Add a New Student</h2>
        <form enctype="multipart/form-data" method='POST' action ='<?= $site_url ?>?page=store' id="form">
            <div class="formLine"><h3>Student Name:<h3><input type='text' name="name" required/></div>
            <div class="formLine">
                <h3>Current Grade:</h3>
                <div class="radios">
                    <p><input type='radio' name="currentGrade" value="Freshman" required/>Freshman</p>
                    <p><input type='radio' name="currentGrade" value="Sophomore" required/>Sophomore</p>
                    <p><input type='radio' name="currentGrade" value="Junior" required/>Junior</p>
                    <p><input type='radio' name="currentGrade" value="Senior" required/>Senior</p>
                </div>
            </div>
            <div class="formLine"><h3>Current GPA:<h3><input type='number' name="currentGPA" required/></div>
            <div class="formLine"><h3>Homeroom Teacher:<h3><input type='text' name="teacher" required/></div>
            <div class="formLine"><h3>Primary Guardian Name:<h3><input type='text' name="guardian" required/></div>
            <div class="formLine"><h3>Emergency Phone:<h3><input type='text' name="phone" required/></div>
            <input type="submit" />
        </form>

    </div>
</div>

