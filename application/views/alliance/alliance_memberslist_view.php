<br />
<div id="content">
    <table width="600">
        <tr>
            <td class=c colspan=8>{al_user_list} ({al_number_of_records}: {i})</td>
        </tr>
        <tr>
            <th>{al_num}</th>
            <th><a href="game.php?page=alliance&mode=memberslist&sort1=1&sort2={s}">{al_member}</a></th>
            <th>{al_message}</th>
            <th><a href="game.php?page=alliance&mode=memberslist&sort1=2&sort2={s}">{al_position}</a></th>
            <th><a href="game.php?page=alliance&mode=memberslist&sort1=3&sort2={s}">{al_points}</a></th>
            <th><a href="game.php?page=alliance&mode=memberslist&sort1=0&sort2={s}">{al_coords}</a></th>
            <th><a href="game.php?page=alliance&mode=memberslist&sort1=4&sort2={s}">{al_member_since}</a></th>
            <th><a href="game.php?page=alliance&mode=memberslist&sort1=5&sort2={s}">{al_estate}</a></th>
        </tr>
        {list_of_members}
        <tr>
            <th>{i}</th>
            <th>{user_name}</th>
            <th><a href="game.php?page=messages&mode=write&id={user_id}"><img src="{dpath}img/m.gif" border=0 title="{write_message}"></a></th>
            <th>{user_ally_range}</th>
            <th>{points}</th>
            <th><a href="game.php?page=galaxy&mode=3&galaxy={user_galaxy}&system={user_system}">{user_galaxy}:{user_system}:{user_planet}</a></th>
            <th>{user_ally_register_time}</th>
            <th><font color={user_onlinetime}/font></th>
        </tr>
        {/list_of_members}
        <tr>
            <td class="c" colspan="9"><a href="game.php?page=alliance">{al_back}</a></td>
        </tr>
    </table>
</div>