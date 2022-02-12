package com.example.ssrc.domain;

import lombok.*;

@Data
@NoArgsConstructor
@AllArgsConstructor
public class Post {
    private String GrpCode;
    private String CustId;
    private String PostSeriNo;
    private String PutProgStatCode;
    private String SecrNumb;
    private String CustName;
    private String PutTitlCont;
    private String QuesDetaCont;
    private String FileTextKindCode;
    private String FileName;
    private String FileStorLocaCont;
    private String FirsCreaDateTime;
    private String FirsCreaEmpl;
    private String LastEditDateTime;
    private String LastEditEmpl;
}
