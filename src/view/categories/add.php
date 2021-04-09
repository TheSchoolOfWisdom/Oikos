<!-- Mon formulaire -->
<h1>Creation d'une categorie</h1>
<div class="add-form">

    <form method="post">

        <div>
            <label>Titre</label>
            <input type="text" name="title"/>
        </div>

        <div>
            <label>Description</label>
            <textarea name="description" rows="3" ></textarea>
        </div>

        <select name="status">
            <option value="1">Publiée</option>
            <option value="0">Non publiée</option>
        </select>

        <div class="success-input cancel-btn">
            <div class="buttons">
                <a href="?controllers=categories&method=list">Anuller</a>
                <input type="submit" name="ADD" value="Créer" />
            </div>
        </div>

    </form>

</div>