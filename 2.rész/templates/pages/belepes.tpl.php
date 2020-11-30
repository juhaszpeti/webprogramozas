    <form action = "?oldal=belep" method = "post">
      <fieldset>
        <legend>Bejlentkezés</legend>
        <br>
        <input type="text" class="gomb" name="felhasznalo" placeholder="felhasználó" required><br><br>
        <input type="password" class="gomb" name="jelszo" placeholder="jelszó" required><br><br>
        <input type="submit" class="gomb" name="belepes" value="Belépés">
        <br>&nbsp;
      </fieldset>
    </form>
    <h3>Ha még nem regisztrált, itt regisztrálhatja magát:</h2>
    <form action = "?oldal=regisztral" method = "post">
      <div class="regisztral">
        <legend>Regisztráció</legend>
       
        <br>
        <input type="text" class="gomb"name="vezeteknev" placeholder="vezetéknév" pattern="[A-Z]{1}+[a-z]*" required><br><br>
        <input type="text" class="gomb" name="utonev" placeholder="utónév" pattern="[A-Z,a-z, ]*" required><br><br>
        <input type="text" class="gomb" name="felhasznalo" placeholder="felhasználói név" required><br><br>
        <input type="password" class="gomb" name="jelszo" placeholder="jelszó" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Muszáj egy számot egy nagy és egy kisbetűt tartalmaznia és legalább 8 karakteres legyen" required><br><br>
        <input type="submit" name="regisztracio" class="gomb" value="Regisztráció">
        <br>&nbsp;
  </div>
    </form>
