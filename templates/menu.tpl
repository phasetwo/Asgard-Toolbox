{strip}

<ul class="nav">
                                <li class="{if !$smarty.get.action}active{/if}">
                                    <a href="index.php" class>News</a>
                                </li>
                                <li class="{if $smarty.get.action == "tools"}active{/if}">
                                    <a href="index.php?action=tools" class>Tools</a>
                                </li>
                                {*
                                <li class="{if $smarty.get.action == "contact"}active{/if}">
                                    <a href="index.php?action=contact" class>Contact</a>
                                </li>
                                *}
				{if $smarty.session.password}
                                <li class="{if $smarty.get.action == "logout"}active{/if}">
                                    <a href="index.php?action=logout" class>Logout</a>
                                </li>
				{/if}
                            </ul>


{/strip}