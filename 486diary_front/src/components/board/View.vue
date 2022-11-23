<template>
    <div>
        <table>
            <tr>
                <th>카테고리</th>
                <td>
                    <select v-model="info.board_category">
                        <option value="">선택</option>
                        <option v-for="(i,row) in ctgList" :key="i" >{{row}}</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>제목</th>
                <td>
                    <input type="text" v-model="info.board_title">
                </td>
            </tr>
            <tr>
                <th>내용</th>
                <td>
                    <textarea cols="30" rows="10" v-model="info.board_contents"></textarea>
                </td>
            </tr>
        </table>
    </div>
    <div class="submit">
        <button class="btn_default">등록</button>
    </div>
</template>

<script>
export default {
    props: {},
    data() {
        return {
            ctgList: {},
            info: {
                board_category: '',
                board_title: '',
                board_contents :''
            }
        }
    },
    mounted() {
        this.getCategory();
    },
    methods: {
        getCategory() {
            this.axios.get('/board/ctgList', { params: this.info }).then(res => {
                const row = res.data;
                if (row.err === 0) {
                    this.ctgList = res.data.list;
                } else {
                    alert(row.err_msg);
                }

            }).catch(error => {
                console.log(error);
                alert("에러발생!!! 연락바람");
            });
        },
        doSubmit() {
            console.log(this.info);
        }

    },
}
</script>



