<template>
    <table>
        <tr>
            <td>No</td>
            <td>카테고리</td>
            <td>제목</td>
            <td>등록자</td>
            <td>등록일</td>
        </tr>
        <tr v-for="(irow, i) in list">
            <td>{{i}}</td>
            <td>{{irow.board_category}}</td>
            <td>{{irow.board_title}}</td>
            <td>{{irow.member_nickname}}</td>
            <td>{{irow.board_wdate}}</td>
        </tr>
    </table>
</template>

<script>
export default {
    name: 'Board',
    props: {},
    data() {
        return {
            info: {
            },
            list: []
        }
    },
    mounted() {
        this.doSearch();
    },
    methods: {
        doSearch() {
            let me = this;
            this.axios.get('/board/list', { params: this.info }).then(res => {
                const row = res.data;
                if (row.err === 0) {
                    me.list = res.data.list;
                } else {
                    alert(row.err_msg);
                }

            }).catch(error => {
                console.log(error);
                alert("에러발생!!! 연락바람");
            });
        }

    },
}
</script>

