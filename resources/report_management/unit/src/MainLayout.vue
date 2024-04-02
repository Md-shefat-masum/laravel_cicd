<template>
    <div class="border report_app">
        <div class="report_app_left border">
            <aside>
                <nav>
                    <ul>
                        <li><a href="#">dashboard</a></li>
                        <li><a href="#">profile</a></li>
                        <li><a href="#">settings</a></li>
                        <li><a href="#">logout</a></li>
                    </ul>
                </nav>
            </aside>
        </div>
        <div class="report_app_right border">
            <header class="border report_app_right_top">
                <div class="left"><button>show menu</button></div>
                <div class="left">
                    <div class="profile"></div>
                </div>
            </header>
            <main class="border route_body">
                <!-- <router-view></router-view> -->
            </main>
        </div>
    </div>
</template>
<script>
export default {

}
</script>
