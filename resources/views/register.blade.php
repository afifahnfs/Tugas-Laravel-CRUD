<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>
        <h1>Buat Account Baru!</h1> 
    </head>
    <body>
        <form method="POST" action="welcome1">
            @csrf
            <thead>
                <h3>Sign Up Form</h3> 
            </thead>
            <tbody>
                <div>
                <label for="nama_depan">First Name</label>
                </div>
                <div>
                <input type="text" placeholder="Nama Depan" id="nama_depan" name="nama_depan">
                </div>
                <br>
                
                <div>
                <label for="nama_belakang">Last Name</label>
                </div>
                <div>
                <input type="text" placeholder="Nama Belakang" id="nama_belakang" name="nama_belakang">
                </div>
                <br>
                
                <div>
                <label>Gender</label>
                </div>
                <div>
                <input type="radio" name="gender" value="male"> Male
                <br>
                <input type="radio" name="gender" value="female"> Female
                <br>
                <input type="radio" name="gender" value="other"> Other
                </div>
                <br>

                <div>
                <label>Nationality</label>
                </div>
                <div>
                <select>
                    <option value="">-- Pilih Negara ---</option>
                    <option value="indonesia">Indonesia</option>
                    <option value="indonesia">Singapura</option>
                    <option value="indonesia">Malaysia</option>
                </select>
                </div>
                <br>
                
                <div>
                <label>Language Spoken</label>
                </div>
                <div>
                <input type="checkbox"  name="bahasa" value="0" checked > Bahasa Indonesia
                <br>
                <input type="checkbox"  name="bahasa" value="1"> English
                <br>
                <input type="checkbox"  name="bahasa" value="2"> Other
                </div>
                <br>
                
                <div>
                <label for="bio">Bio:</label>
                </div>
                <div>
                <textarea cols="100" rows="10" id="bio"></textarea>
                </div>
                <br>

                <input type="submit" value="Sign Up">
            </tbody>
        </form>
    </body>
</html>